class Solution:
    def checkPalindrome(self, s: str, deleted: bool):
        if not s or len(s) == 1:
            return True
        if deleted and s[0] != s[-1]:
            return False
        return self.checkPalindrome(s[1:-1], deleted) if s[0] == s[-1] else (self.checkPalindrome(s[0:-1], True) or self.checkPalindrome(s[1:], True))
    def validPalindrome(self, s: str) -> bool:
        return self.checkPalindrome(s, False)

sol = Solution()
print(sol.validPalindrome('abc'))
print(sol.validPalindrome('aba'))
print(sol.validPalindrome('abca'))
print(sol.validPalindrome('ab'))
print(sol.validPalindrome('acda'))
print(sol.validPalindrome('abdab'))